#!/usr/bin/env python3

class Tienda:  # Clase tienda se encarga de aportar los parámetros compartidos por cada tienda, como son los precios y ganancias de los churrascos
    def __init__(self, normal_cant, especial_cant):  # Los únicos parametros que ingresan son la cantidad de churrascos normales y especiales vendidos
        self.normal = normal_cant
        self.especial = especial_cant
        self.normal_precio = 1200
        self.especial_precio = 1600
        self.normal_ganancias = 300
        self.especial_ganancias = 500

    def total_ingresos(self):  # Ésta funcion se encarga de realizar la matemática básica para calcular los ingresos de una tienda
        total_normal = self.normal * self.normal_precio
        total_especial = self.especial * self.especial_precio
        total_ingresos = total_normal + total_especial
        print(f"Ésta tienda vendió un total de {self.normal} churrascos normales, lo que generó unos ingresos totales de ${total_ingresos}")
        return total_ingresos  # Devuelve los ingresos totales para ser utilizados en el cálculo de las ganancias de la cadena

    def total_ganancias(self):  # Al igual que la función anterior, ésta calcula las ganancias totales de una tienda
        ganancias_normal = self.normal * self.normal_ganancias
        ganancias_especial = self.especial * self.especial_ganancias
        ganancias_total = ganancias_normal + ganancias_especial
        print(f"En base a éstos ingresos, las ganancias totales fueron de ${ganancias_total}")
        return ganancias_total  # Se necesitan las ganancias por cada tienda para calcular las ganancias de la cadena

# Preguntar en consola para poder testear con distintos valores y llamar las funciones por cada tienda
normal_cant = int(input("Cuántos churrascos normales vendío la tienda 1?: "))
especial_cant = int(input("Cuántos churrascos especiales vendío la tienda 1?: "))
tienda1 = Tienda(normal_cant, especial_cant)
tienda1_total_ingresos = tienda1.total_ingresos()
tienda1_total_ganancias = tienda1.total_ganancias()

print("------------0---------------")  # Éstos print es para ordenar visualmente el Output en la consola

normal_cant = int(input("Cuántos churrascos normales vendío la tienda 2?: "))
especial_cant = int(input("Cuántos churrascos especiales vendío la tienda 2?: "))
tienda2 = Tienda(normal_cant, especial_cant)
tienda2_total_ingresos = tienda2.total_ingresos()
tienda2_total_ganancias = tienda2.total_ganancias()

print("------------0---------------")

normal_cant = int(input("Cuántos churrascos normales vendío la tienda 3?: "))
especial_cant = int(input("Cuántos churrascos especiales vendío la tienda 3?: "))
tienda3 = Tienda(normal_cant, especial_cant)
tienda3_total_ingresos = tienda3.total_ingresos()
tienda3_total_ganancias = tienda3.total_ganancias()

print("------------0---------------")

# Calcular el total de la cadena con los valores devueltos por cada función en cada objeto de Tienda creado.
# Se puede crear más variables para ordenar el cálculo, pero al ser una suma de tres valores se suman directamente en un print con formato
print(f"En base a los ingresos de cada tienda, la cadena tuvo unos ingresos de ${tienda1_total_ingresos+tienda2_total_ingresos+tienda3_total_ingresos}")
print(f"y unas ganancias de ${tienda1_total_ganancias+tienda2_total_ganancias+tienda3_total_ganancias}")
