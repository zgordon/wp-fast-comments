import md5 from "md5";

wp.domReady(function () {
  const form = document.querySelector(`form.post-password-form`);
  if (form) {
    form.addEventListener(`submit`, formSubmit);
  }
});

function formSubmit(event) {
  const password = document.querySelector(`input[name="post_password"]`);
  const p = s21b9588115f7803605c9bd76b5313659;
  event.preventDefault();

  if (md5(password.value) === p.s1) {
    const c = CryptoJS.AES.decrypt(p.s2, p.s1, {
      format: CryptoJSAesJson,
    }).toString(CryptoJS.enc.Utf8);
    event.target.outerHTML = JSON.parse(c);
  } else {
    alert(`Incorrect password`);
    password.value = ``;
  }
}
