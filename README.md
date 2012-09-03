# Simple ZF1 App

Just an example...

Windows
```
c:\windows\system32\drivers\etc\hosts
```

GNU\Linux - MacOS

```
/etc/hosts
```

```
<VirtualHost *:80>
    ServerName zf-intro.local
    DocumentRoot "C:\web\zf-intro\public"
    
    SetEnv APPLICATION_ENV development
    
    <Directory "C:\web\zf-intro\public">
        Options Indexes FollowSymLinks
        AllowOverride All
        Order deny,allow
        Allow from all
    </Directory> 
    
    ErrorLog "logs/love.local.log"
</VirtualHost>
```