

window.addEventListener('scroll', function() {
  var scrollY = window.scrollY;

  if ( window.scrollY > 120 ) {
    document.querySelector('nav').classList.add('small');
  } else {
    document.querySelector('nav').classList.remove('small');
  }
});

let snippets = document.querySelectorAll('div.snippet pre');
snippets.forEach( function(preEl) {
  console.log(preEl);
  let lang = preEl.getAttribute('lang'),
      name = preEl.getAttribute('name'),
      codeEl = preEl.firstChild,
      copyEl = codeEl.nextSibling,
      notifyEl = preEl.lastChild,
      codeCB = (function( contents ) {
        codeEl.innerHTML = contents;
      });

  getSnippetFile(lang, name, codeCB, true);

  copyEl.addEventListener('click', function() {
    let copyCB = (function( contents ) {
      navigator.clipboard.writeText(contents);
      copyNotification(notifyEl);
    });
    getSnippetFile(lang, name, copyCB, false);
  });

});

function getSnippetFile(lang, name, callback, encode = true) {
  let rawFile = new XMLHttpRequest(),
      url = 'snippets/getSnippet.php?lang='+lang+'&name='+name+'&encode='+encode;
      console.log(url);
  rawFile.open("GET", url, false);

  rawFile.onreadystatechange = function ()
  {
      if(rawFile.readyState === 4) {
          if(rawFile.status === 200 || rawFile.status == 0) {
              let allText = rawFile.responseText;
              console.log(allText);
              callback(allText);
          }
      }
  }
  rawFile.send(null);
}

function copyNotification(notifyEl) {
  //let notifyEl = document.querySelector('div#copy-notification');

  notifyEl.style.display = 'block';

  setTimeout(function() {
    notifyEl.classList.add('active');
  }, 10);

  setTimeout(function() {
    notifyEl.classList.remove('active');
  }, 2000);

  setTimeout(function() {
    notifyEl.style.display = 'none';
  }, 2500);
}
