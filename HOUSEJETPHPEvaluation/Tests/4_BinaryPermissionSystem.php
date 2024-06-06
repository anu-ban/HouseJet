<?php

class Permissions {
    const  READ = 1;          // 00000001
    const  WRITE = 2;         // 00000010
    const  DELETE = 4;        // 00000100
    const  PUSH = 8;         // 00001000
    const  PULL = 16;        // 00010000
    const  FLING = 32;        // 00100000
    const  FLY = 64;         // 01000000

    private int $userPermission = 0; 

    public function addPermission(int $permissionValue): void {
        $this->userPermission |= $permissionValue; // Bitwise OR to add permissions
    }

    public function removePermission(int $permissionValue): void {
        $this->userPermission &= ~$permissionValue; // Bitwise AND with NOT to remove
    }

    public function hasPermission(int $permissionValue): bool {
        return ($this->userPermission & $permissionValue) === $permissionValue; // Bitwise AND
    }
}

$permissions = new Permissions();
$permissions->addPermission(Permissions::READ);
assert($permissions->hasPermission(Permissions::READ));
assert(!$permissions->hasPermission(Permissions::WRITE));

$permissions->addPermission(Permissions::FLING);
$permissions->addPermission(Permissions::READ);
assert($permissions->hasPermission(Permissions::FLING));
assert($permissions->hasPermission(Permissions::READ));

$permissions->removePermission(Permissions::READ);
$permissions->removePermission(Permissions::DELETE);
assert(!$permissions->hasPermission(Permissions::READ));
assert(!$permissions->hasPermission(Permissions::DELETE));
assert($permissions->hasPermission(Permissions::FLING));
