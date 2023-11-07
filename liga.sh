#!/bin/bash

function anadir_equipo {
  echo "Introduzca nuevo equipo"
  read EQUIPO
  CONSULTA="insert into equipo (Nombre_equipo) values ('$EQUIPO');"
  echo $CONSULTA | mysql liga
}

while [ true ]
do
echo "Equipos de la liga"
echo "select * from equipo order by Nombre_equipo;" | mysql -t liga 
echo "Elegir opción:"
echo "1. Añadir equipo"
echo "5. Salir"
read OPCION
case $OPCION in
1) anadir_equipo
   ;;
5) exit 0;;
esac
done
