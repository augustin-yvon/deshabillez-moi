<?php

/**
 * Représente un utilisateur du système.
 */
class User
{
    private int $id;
    private string $username;
    private string $email;
    private string $password;
    private bool $logState;

    /**
     * Constructeur de la classe User.
     *
     * @param string $login Le nom d'utilisateur.
     * @param string $password Le mot de passe de l'utilisateur.
     * @param int $id L'identifiant de l'utilisateur (par défaut, 0).
     * @param bool $logState L'état de connexion de l'utilisateur (par défaut, false).
     */
    public function __construct(string $username, string $email,  string $password, int $id = 0, bool $logState = false)
    {
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
        $this->id = $id;
        $this->logState = $logState;
    }

    /**
     * SETTER
     */

    public function setUsername(string $newUsername): User
    {
        $this->username = $newUsername;
        return $this;
    }

    public function setEmail(string $newEmail): User
    {
        $this->email = $newEmail;
        return $this;
    }

    public function setPassword(string $newPassword): User
    {
        $this->password = $newPassword;
        return $this;
    }

    public function setId(int $newId): User
    {
        $this->id = $newId;
        return $this;
    }

    /**
     * GETTER
     */

    public function getUsername(): string
    {
        return $this->username;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getLogState(): bool
    {
        return $this->logState;
    }

    /**
     * Connecte l'utilisateur.
     */
    public function logIn(): void
    {
        $this->logState = true;
    }

    /**
     * Déconnecte l'utilisateur.
     */
    public function logOut(): void
    {
        $this->logState = false;
    }

    /**
     * Récupère les informations de l'utilisateur sous forme de tableau associatif.
     *
     * @return array
     */
    public function getInfo(): array
    {
        $tab = [];
        $tab['id'] = $this->id;
        $tab['login'] = $this->username;
        $tab['email'] = $this->email;
        $tab['password'] = $this->password;
        $tab['logState'] = $this->logState;
        return $tab;
    }
}
