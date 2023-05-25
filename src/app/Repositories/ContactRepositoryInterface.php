<?php

namespace App\Repositories;

interface ContactRepositoryInterface
{
    public function getDepartments();
    public function getContacts();
    public function createContact(int $department_id, string $name, string $email, string $content, int $age, int $gender);
}
