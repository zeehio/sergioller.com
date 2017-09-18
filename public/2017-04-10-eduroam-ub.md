tags: eduroam, UB

# How to connect to eduroam at the University of Barcelona

## GNU/Linux

If you want to connect to eduroam at the University of Barcelona you 
will need the following information:

- Security: WPA Enterprise
- Authentication: TTLS (Tunneled TLS)
- Anonymous Identity: anonymous@ub.edu
- CA Certificate: `/usr/share/ca-certificates/mozilla/AddTrust_External_Root.crt`
- Internal authentication: PAP
- User name: jherg006.alumnes
- Password: ********

If you don't find the CA Certificate file you can download it from
[here](mypermanent.php?slug=AddTrust_External_Root.crt)



## Windows

- Windows does not ask for an anonymous identity, but you need to provide the 
  `@ub.edu` in the user name
- User name: jherg006.alumnes@ub.edu
