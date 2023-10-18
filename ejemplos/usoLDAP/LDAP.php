<?php
    $ldapurl = "ldap.forumsys.com";
    $ldapport = 389;

    $ldapconnection = ldap_connect($ldapurl, $ldapport);

    $ldapUser = "prueba";
    $ldapPassword = "password";

    $ldapDomainName = "uid =". $ldapUser .",dc=example,dc=com";
    if($ldapconnection){
        print("Conexion establecida <br>");
        ldap_set_option($ldapconnection, LDAP_OPT_PROTOCOL_VERSION, 3);
        $ldapAuth = ldap_bind($ldapconnection, $ldapDomainName, $ldapPassword);
        if($ldapAuth){
            print("Autenticacion correcta");
        }else {
            print("El usuario " . $ldapUser ." no existe");
        }
    }else {
        print("Conexion erronea");
    }

    ldap_close($ldapconnection);
?>