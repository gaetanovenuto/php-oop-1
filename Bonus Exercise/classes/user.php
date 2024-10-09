<?php 

class User {
    private string $firstName;
    private string $lastName;
    private int $age;
    private string $email;
    private string $password;

    function __construct(
        string $firstName,
        string $lastName,
        int $age,
        string $email,
        string $password
    ) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->age = $age;
        $this->email = $email;
        $this->password = $password;

        if (strlen($password) >= 7) {
            $this->password = $password;
        } else {
            error_log('Inserisci una password lunga almeno 7 caratteri');
        }
    }

    /*
        Getters & Setters
    */
    public function getFirstName(): string {
        return $this->firstName;
    }

    public function getLastName(): string {
        return $this->lastName;
    }

    public function getAge(): int {
        return $this->age;
    }

    public function getEmail(): string {
        return $this->email;
    }

    public function getPassword(): string {
        return $this->password;
    }
}