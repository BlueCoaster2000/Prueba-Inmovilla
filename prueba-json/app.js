const datosJSON = { info, infoAlt };

const infoAltContainer = document.getElementById('info-alt');
const infoContainer = document.getElementById('info');

function mostrarObjetosComoLista(container, data) {
  if (!data || data.length === 0) {
    container.innerText = 'El array de resultados está vacío';
    return;
  }
  //Para insertarlo en el cuerpo del documento si es valido
  let html = '';
  data.forEach(objeto => {
      html += '<ul>';
      for (const key in objeto) {
          html += `<li>${key}: ${objeto[key]}</li>`;
        }
        html += '</ul>';
    });
    
    container.innerHTML = html;
    //END Para insertarlo en el cuerpo del documento si es valido
}

try {
  const infoAltJSON = JSON.parse(datosJSON.infoAlt);
  mostrarObjetosComoLista(infoAltContainer, infoAltJSON);
} catch (error) {
  console.error('Error al convertir JSON (infoAlt): ' + error);
  infoAltContainer.innerText = 'Error al convertir JSON (infoAlt)';
}

try {
  const infoJSON = JSON.parse(datosJSON.info);
  mostrarObjetosComoLista(infoContainer, infoJSON);
} catch (error) {
  console.error('Error al convertir JSON (info): ' + error);
  infoContainer.innerText = 'Error al convertir JSON (info)';
}
