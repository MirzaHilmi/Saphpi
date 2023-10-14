<?php
namespace Saphpi\Contracts\Validation;

interface ValidationRule {
    public function validate(string $attribute, mixed $value): bool;

    public function error(): string;
}
