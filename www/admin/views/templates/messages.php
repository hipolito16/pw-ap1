<?php

if (isset($_SESSION['errorClass1']) && isset($_SESSION['errorMsg1'])) {
    unset($_SESSION['errorClass1']);
    unset($_SESSION['errorMsg1']);
}

if (isset($_SESSION['errorClass2']) && isset($_SESSION['errorMsg2'])) {
    unset($_SESSION['errorClass2']);
    unset($_SESSION['errorMsg2']);
}