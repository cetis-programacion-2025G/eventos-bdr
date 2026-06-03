<?php 
if (!function_exists('mb_str_pad')) {
    function mb_str_pad(
        string $string,
        int $length,
        string $pad_string = ' ',
        int $pad_type = STR_PAD_RIGHT,
        ?string $encoding = null
    ): string {
        $encoding ??= mb_internal_encoding();

        $str_length = mb_strlen($string, $encoding);
        $pad_length = $length - $str_length;

        if ($pad_length <= 0) {
            return $string;
        }

        $repeat = mb_substr(
            str_repeat($pad_string, (int) ceil($pad_length / mb_strlen($pad_string, $encoding))),
            0,
            $pad_length,
            $encoding
        );

        return match ($pad_type) {
            STR_PAD_LEFT => $repeat . $string,
            STR_PAD_BOTH => mb_substr($repeat, 0, intdiv($pad_length, 2), $encoding)
                . $string
                . mb_substr($repeat, intdiv($pad_length, 2), null, $encoding),
            default => $string . $repeat,
        };
    }
}