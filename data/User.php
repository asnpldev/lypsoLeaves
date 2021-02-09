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


    /**
     * User constructor.
     * @param int $id
     * @param string $login
     * @param string $fName
     * @param string $fmName
     * @param int $departementId
     * @param int $activeAccount
     * @param string $sx
     */
    public function __construct(int $id, string $login, string $fName, string $fmName, int $departementId, int $activeAccount, string $sx)
    {
        $this->id = $id;
        $this->login = $login;
        $this->fName = $fName;
        $this->fmName = $fmName;
        $this->departmentsId = $departementId;
        $this->activeAccount = $activeAccount;
        $this->sx = $sx;
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