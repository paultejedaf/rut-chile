
# Rut Chile
Calcula el digito verificador de RUT Chile


## Uso

Calcular digito verificador

```
	$digito = Rut.calcular_digito( 12458785 );
	echo $digito; // 9
```

Comprobar RUT y digito

```
	$rut_valido = Rut.es_valido( 12458785, 7);
	echo $rut_valido; // FALSE
	
	$rut_valido = Rut.es_valido( 12458785, 9);
	echo $rut_valido; // TRUE
```


Crear un RUT aleatoriamente

```
	// RUT Persona
	$rut_nuevo = Rut.crear_aleatorio();
```

```
	// RUT Empresa
	$rut_nuevo = Rut.crear_aleatorio( 1000000, 100000000 );
	echo $rut_nuevo;  // 86479658-8
```


