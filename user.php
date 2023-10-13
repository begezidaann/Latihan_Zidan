<?php 
   class user{
    private $nama;
    private $email;
    private $password;
    private $listUser = [
        [
            'fullname' => 'Zidan Muhammad Herman',
            'tgllahir' => '26 September 2003',
            'alamat' => 'Jl. Ampera No.119 Kota Tasikmalaya',
            'hobi' => 'bermain musik',
        ],
        [
            'fullname' => 'Zidan Muhammad Herman',
            'tgllahir' => '26 September 2003',
            'alamat' => 'Jl. Ampera No.119 Kota Tasikmalaya',
            'hobi' => 'main game',
        ],
        [
            'fullname' => 'Zidan Muhammad Herman',
            'tgllahir' => '26 September 2003',
            'alamat' => 'Jl. Ampera No.119 Kota Tasikmalaya',
            'hobi' => 'bernyanyi',
        ],
        [
            'fullname' => 'Zidan Muhammad Herman',
            'tgllahir' => '26 September 2003',
            'alamat' => 'Jl. Ampera No.119 Kota Tasikmalaya',
            'hobi' => 'bermain basket',
        ]
    ];


    public function getNama() {
        return $this->nama;
    }

    public function setNama($nama) {
        $this->nama = $nama;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function getAll() {
        return $this->listUser;
    }

    public function getById($user_id) {
        $result = $this->listUser;
        return [$result[$user_id]];
    }

    

}
?>