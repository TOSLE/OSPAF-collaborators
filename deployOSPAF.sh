#!/bin/bash
LOCALREPO=./
OSPAF=../OSPAF/

echo "Lancement de la copie des fichiers..."
cp ${LOCALREPO}/css/ospaf.css ${OSPAF}css/ospaf.css
echo "Dossier 1 sur 4 ..... OK"
cp -R ${LOCALREPO}fonts ${OSPAF}
echo "Dossier 2 sur 4 ..... OK"
cp -R ${LOCALREPO}js ${OSPAF}
echo "Dossier 3 sur 4 ..... OK"
cp -R ${LOCALREPO}icons/material-design-icons/iconfont ${OSPAF}icons/material-design-icons
echo "Dossier 4 sur 4 ..... OK"
echo "Execution du script termine."