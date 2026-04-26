Remarque importante concernant l’émulateur Android

Dans le cadre de la réalisation de ce TP, j’ai rencontré un problème lors de l’exécution de l’application Android sur l’émulateur, lié à la communication avec le serveur local.

En effet, l’utilisation de localhost ou 127.0.0.1 n’a pas permis d’accéder aux web services PHP hébergés sur ma machine. Cela est dû au fait que, dans un environnement d’émulation Android, ces adresses font référence à l’émulateur lui-même et non à la machine hôte.
