#!/usr/bin/env python3

def imprime_gatos(cantidad):
    for x in range(cantidad):
        print("#"*cantidad)
        cantidad-=1

cantidad = int(input("ingrese cantidad: "))

if 1 < cantidad < 100:
    imprime_gatos(cantidad)
else:
    print("Favor introduce un número entre el 2 y el 99")
