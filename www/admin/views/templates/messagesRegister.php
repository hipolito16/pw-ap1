<?php

if (isset($_SESSION['success'])) {
    $success = true;
    unset($_SESSION['success']);
} elseif (isset($_SESSION['failed'])) {
    $failed = true;
    unset($_SESSION['failed']);
}
