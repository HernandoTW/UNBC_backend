# UNBC_backend
Backend para prueba tecnica UNBC

# Proyecto de Gestión de Usuarios

Este es un proyecto de gestión de usuarios que permite realizar operaciones CRUD (Crear, Leer, Actualizar y Eliminar) sobre usuarios. La aplicación se divide en dos partes principales: un backend desarrollado en PHP y un frontend desarrollado en React.

## Tecnologías Utilizadas

### Backend
- **PHP**: Lenguaje de programación utilizado para desarrollar la lógica del servidor.
- **MySQL**: Sistema de gestión de bases de datos utilizado para almacenar la información de los usuarios.
- **Apache**: Servidor web utilizado para alojar el backend.

### Frontend
- **React**: Biblioteca de JavaScript para construir interfaces de usuario interactivas.
- **React Router**: Biblioteca para manejar el enrutamiento en la aplicación React.
- **React Toastify**: Biblioteca para mostrar notificaciones de manera sencilla.
- **Bulma**: Framework CSS utilizado para el diseño y estilos de la aplicación.
- **SweetAlert2**: Biblioteca para mostrar alertas y confirmaciones de manera elegante.

## Descripción

### Backend
El backend está construido en PHP y expone una serie de endpoints que permiten gestionar usuarios. Las operaciones soportadas incluyen:

- **Obtener usuarios**: Listar todos los usuarios.
- **Agregar usuario**: Crear un nuevo usuario.
- **Editar usuario**: Actualizar la información de un usuario existente.
- **Eliminar usuario**: Borrar un usuario de la base de datos.

La API está diseñada para ser fácil de usar y eficiente, proporcionando respuestas en formato JSON.

### Frontend
El frontend es una aplicación React que interactúa con el backend para permitir a los usuarios realizar operaciones CRUD. Las características incluyen:

- **Formulario para agregar y editar usuarios**: Interfaz amigable para ingresar y modificar datos de usuarios.
- **Lista de usuarios**: Visualización de todos los usuarios almacenados en la base de datos.
- **Notificaciones**: Feedback visual al usuario sobre las operaciones realizadas (agregar, editar, eliminar).
- **Estilos responsivos**: La aplicación utiliza Bulma para garantizar que la interfaz se vea bien en dispositivos de diferentes tamaños.

## Instalación

### Backend
1. Clona el repositorio en tu máquina local.
2. Asegúrate de tener un servidor web (como Apache) configurado.
3. Importa la base de datos desde el archivo SQL proporcionado en el proyecto.
4. Configura las credenciales de la base de datos en los archivos necesarios.

### Frontend
1. Clona el repositorio en tu máquina local.
2. Navega al directorio del frontend y ejecuta el siguiente comando para instalar las dependencias:
   ```bash
   npm install

