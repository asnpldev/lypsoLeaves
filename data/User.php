<?php


class User
{
    public int $id;
    public string $login;
    public string $fName;
    public string $fmName;
    public int $departmentsId;
    public int $activeAccount;
    public string $sx;
    public int $admin;
    public string $ppower;


    /**
     * User constructor.
     * @param int $id
     * @param string $login
     * @param string $fName
     * @param string $fmName
     * @param int $departementId
     * @param string $ppower
     * @param int $activeAccount
     * @param string $sx
     * @param int $admin
     */
    public function __construct(int $id, string $login, string $fName, string $fmName, int $departementId, string $ppower, int $activeAccount, string $sx, int $admin)
    {
        $this->id = $id;
        $this->login = $login;
        $this->fName = $fName;
        $this->fmName = $fmName;
        $this->departmentsId = $departementId;
        $this->activeAccount = $activeAccount;
        $this->sx = $sx;
        $this->admin = $admin;
        $this->ppower = $ppower;
    }

    /**
     * @return string
     */
    public function getPermPower(): string
    {
        return $this->ppower;
    }


    /**
     * @return int
     */
    public function getAdmin(): int
    {
        return $this->admin;
    }

    /**
     * @return string
     */
    public function getSx(): string
    {
        return $this->sx;
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
    public function getDepartmentsId(): int
    {
        return $this->departmentsId;
    }

    /**
     * @return int
     */
    public function getActiveAccount(): int
    {
        return $this->activeAccount;
    }
}