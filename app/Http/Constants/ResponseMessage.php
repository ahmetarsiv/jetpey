<?php

namespace App\Http\Constants;

class ResponseMessage
{
    public static function SuccessMessage(): array
    {
        return [
            'status' => true,
            'title' => 'Success',
            'message' => 'Your transaction has been completed successfully.'
        ];
    }

    public static function ErrorMessage(): array
    {
        return [
            'status' => false,
            'title' => 'Error',
            'message' => 'An error was encountered while performing your operation. Please try again.'
        ];
    }
}
