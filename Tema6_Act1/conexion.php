<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $login = $_POST["login"];
    $pass = $_POST["pass"];

    $ldapurl = "ldap.forumsys.com";
    $ldapport = 389;

    $ldapconnection = ldap_connect($ldapurl, $ldapport);

    $ldapDomainName = "uid =". $login .",dc=example,dc=com";
    if($ldapconnection){
        print("Conexion establecida <br>");
        ldap_set_option($ldapconnection, LDAP_OPT_PROTOCOL_VERSION, 3);
        $ldapAuth = ldap_bind($ldapconnection, $ldapDomainName, $pass);
        if($ldapAuth){
            print("Autenticacion correcta");
        }else {
            print("El usuario " . $login ." no existe");
        }
    }else {
        print("Conexion erronea");
    }

    ldap_close($ldapconnection);
?>
</body>
</html>