[0;1;32m●[0m bind9.service - BIND Domain Name Server
     Loaded: loaded (/etc/systemd/system/bind9.service; enabled; vendor preset: enabled)
     Active: [0;1;32mactive (running)[0m since Sun 2026-03-22 10:25:09 WAT; 24h ago
       Docs: man:named(8)
    Process: 3872705 ExecReload=/usr/sbin/rndc reload (code=exited, status=0/SUCCESS)
   Main PID: 3708458 (named)
      Tasks: 18 (limit: 28802)
     Memory: 130.9M
        CPU: 2min 6.123s
     CGroup: /system.slice/bind9.service
             └─3708458 /usr/sbin/named -f -4 -u bind

Mar 22 10:25:09 srv200.arobase360.com named[3708458]: automatic empty zone: B.E.F.IP6.ARPA
Mar 22 10:25:09 srv200.arobase360.com named[3708458]: automatic empty zone: 8.B.D.0.1.0.0.2.IP6.ARPA
Mar 22 10:25:09 srv200.arobase360.com named[3708458]: automatic empty zone: EMPTY.AS112.ARPA
Mar 22 10:25:09 srv200.arobase360.com named[3708458]: automatic empty zone: HOME.ARPA
Mar 22 10:25:09 srv200.arobase360.com named[3708458]: automatic empty zone: RESOLVER.ARPA
Mar 22 10:25:09 srv200.arobase360.com named[3708458]: configuring command channel from '/etc/bind/rndc.key'
Mar 22 10:25:09 srv200.arobase360.com named[3708458]: [0;1;39m[0;1;31m[0;1;39mcommand channel listening on 127.0.0.1#953[0m
Mar 23 10:47:09 srv200.arobase360.com systemd[1]: Reloading BIND Domain Name Server.
Mar 23 10:47:09 srv200.arobase360.com rndc[3872705]: server reload successful
Mar 23 10:47:09 srv200.arobase360.com systemd[1]: Reloaded BIND Domain Name Server.

[0;1;32m●[0m named.service - BIND Domain Name Server
     Loaded: loaded (/lib/systemd/system/named.service; enabled; vendor preset: enabled)
     Active: [0;1;32mactive (running)[0m since Sat 2026-03-21 11:11:30 WAT; 1 day 23h ago
       Docs: man:named(8)
   Main PID: 3399399 (named)
      Tasks: 18 (limit: 28802)
     Memory: 143.8M
        CPU: 5min 52.765s
     CGroup: /system.slice/named.service
             └─3399399 /usr/sbin/named -f -u bind

Mar 21 11:11:30 srv200.arobase360.com named[3399399]: automatic empty zone: A.E.F.IP6.ARPA
Mar 21 11:11:30 srv200.arobase360.com named[3399399]: automatic empty zone: B.E.F.IP6.ARPA
Mar 21 11:11:30 srv200.arobase360.com named[3399399]: automatic empty zone: 8.B.D.0.1.0.0.2.IP6.ARPA
Mar 21 11:11:30 srv200.arobase360.com named[3399399]: automatic empty zone: EMPTY.AS112.ARPA
Mar 21 11:11:30 srv200.arobase360.com named[3399399]: automatic empty zone: HOME.ARPA
Mar 21 11:11:30 srv200.arobase360.com named[3399399]: automatic empty zone: RESOLVER.ARPA
Mar 21 11:11:30 srv200.arobase360.com named[3399399]: configuring command channel from '/etc/bind/rndc.key'
Mar 21 11:11:30 srv200.arobase360.com named[3399399]: [0;1;39m[0;1;31m[0;1;39mcommand channel listening on 127.0.0.1#953[0m
Mar 21 11:11:30 srv200.arobase360.com named[3399399]: configuring command channel from '/etc/bind/rndc.key'
Mar 21 11:11:30 srv200.arobase360.com named[3399399]: [0;1;39m[0;1;31m[0;1;39mcouldn't add command channel ::1#953: address not available[0m
