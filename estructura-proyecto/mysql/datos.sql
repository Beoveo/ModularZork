/*
  Recuerda que deshabilitar la opción "Enable foreign key checks" para evitar problemas a la hora de importar el script.
*/
TRUNCATE TABLE `RolesUsuario`;
TRUNCATE TABLE `Roles`;
TRUNCATE TABLE `Usuarios`;

INSERT INTO `Roles` (`id`, `nombre`) VALUES
(1, 'user'),
(2, 'admin');


INSERT INTO `RolesUsuario` (`usuario`, `rol`) VALUES
(1, 1),
(2, 1),
(2, 2);

/*
  La contraseña para ambos usuarios es '12345' 
  pasword_hash('$2y$10$0eR.KhfTH5ybn/jlB86hwe/1nQeCKXk2RcLEjBscJbpUaF504kSOi', PASSWORD_DEFAULT) == '12345'
*/
INSERT INTO `Usuarios` (`id`, `username`, `password`) VALUES
(1, 'user@example.org', '$2y$10$0eR.KhfTH5ybn/jlB86hwe/1nQeCKXk2RcLEjBscJbpUaF504kSOi'),
(2, 'admin@example.org', '$2y$10$0eR.KhfTH5ybn/jlB86hwe/1nQeCKXk2RcLEjBscJbpUaF504kSOi');