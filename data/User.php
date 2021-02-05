<?php


class User
{
    private int $id;
    private string $login;
    private string $fName;
    private string $fmName;
    private int $departementId;
    private int $activeAccount;


    /**
     * User constructor.
     * @param int $id
     * @param string $login
     * @param string $fName
     * @param string $fmName
     * @param int $departementId
     * @param int $activeAccount
     */
    public function __construct(int $id, string $login, string $fName, string $fmName, int $departementId, int $activeAccount)
    {
        $this->id = $id;
        $this->login = $login;
        $this->fName = $fName;
        $this->fmName = $fmName;
        $this->departementId = $departementId;
        $this->activeAccount = $activeAccount;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getLogin(): string
    {
        return $this->login;
    }

    /**
     * @return string
     */
    public function getFName(): string
    {
        return $this->fName;
    }

    /**
     * @return string
     */
    public function getFmName(): string
    {
        return $this->fmName;
    }

    /**
     * @return int
     */
    public function getDepartementId(): int
    {
        return $this->departementId;
    }

    /**
     * @return int
     */
    public function getActiveAccount(): int
    {
        return $this->activeAccount;
    }
}