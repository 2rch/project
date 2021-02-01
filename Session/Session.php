<?php
class Session{
    public function setName($name): void{
        session_name($name);
    }
    public function getName(): string{
        return session_name();
    }
    public function setId($id): void{
        session_id($id);
    }
    public function getId(): string{
        return session_id();
    }
    public function cookieExists(): bool{
        if (!empty($_COOKIE)){
            return true;
        }
        else return false;
    }
    public function sessionExists(): bool{
        if (!empty($_SESSION)){
            return true;
        }
        else return false;
    }
    public function start(): bool{
        session_start();
        return $this->sessionExists();
    }
    public function destroy(): void{
        session_destroy();
    }
    public function setSavePath($savePath): void{
        session_save_path($savePath);
    }
    public function set($key, $val): void{
        $_SESSION[$key] = $val;
    }
    public function get($key){
        return $_SESSION[$key];
    }
    public function contains($key): bool{
        if (!empty($_SESSSION[$key])){
            return true;
        }
        else return false;
    }
    public function delete($key): void{
        unset($_SESSION[$key]);
    }
}