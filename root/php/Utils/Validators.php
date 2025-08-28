<?php

class Validators {
    public static function validateEmail($email) {
    }

    public static function validateCpf($cpf) {
    }

    public static function validatePhoneNumber($phone) {
         $pattern = "/^\([\d]{2}\)[ ]?[\d]{4,5}-[\d]{4}$/";

        return preg_match($pattern, $phone);
    }

    public static function validateCnpj($cnpj) {
    }
}