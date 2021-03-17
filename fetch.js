const url = 'http://localhost/php-crud-api/api.php/flower';
// const url = 'http://localhost/php-crud-api/api.php/user';

const getFlowers = fetch(url)
  .then((response) => response.json())
  .then((data) => {
    data.forEach((flower) => {
      console.log(flower);
      const el = document.createElement('div');
      el.textContent = JSON.stringify(flower);
      document.body.appendChild(el);
    });
    return data;
  })
  .catch(function (err) {
    console.error(`error: ${err}`);
    document.getElementById('error1').innerHTML = `oops, network error`;
    document.getElementById('error2').innerHTML = `(it's not you, it's them)`;
  });
