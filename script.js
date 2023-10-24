const fullname = document.querySelector('#fullname')
const nik = document.querySelector('#nik')
const nisn = document.querySelector('#nisn')
const phone = document.querySelector('#phone')
const postalCode = document.querySelector('#postal_code')

fullname.onkeypress = (event) =>
  (event.charCode > 64 && event.charCode < 91) ||
  (event.charCode > 96 && event.charCode < 123) ||
  event.charCode == 32

nik.onkeypress = (event) => event.charCode > 47 && event.charCode < 58
nisn.onkeypress = (event) => event.charCode > 47 && event.charCode < 58
phone.onkeypress = (event) => event.charCode > 47 && event.charCode < 58
postalCode.onkeypress = (event) => event.charCode > 47 && event.charCode < 58

const passPhoto = document.querySelector('#pass_photo')
const ktp = document.querySelector('#ktp')
const diploma = document.querySelector('#diploma')
const transcript = document.querySelector('#transcript')

const allowPicture = function () {
  const allowedExtensions = /(\.png|\.jpg|\.jpeg)$/i
  const selectedFile = this.files[0]

  if (!allowedExtensions.test(selectedFile.name)) {
    alert('File tersebut tidak valid!')
    this.value = ''
  }

  if (selectedFile.size > 5 * 1024 * 1024) {
    alert('Ukuran file terlalu besar!')
    this.value = ''
  }
}

const allowPDF = function () {
  const allowedExtensions = /(\.pdf)$/i
  const selectedFile = this.files[0]

  if (!allowedExtensions.test(selectedFile.name)) {
    alert('File tersebut tidak valid!')
    this.value = ''
  }

  if (selectedFile.size > 5 * 1024 * 1024) {
    alert('Ukuran file terlalu besar!')
    this.value = ''
  }
}

passPhoto.addEventListener('change', allowPicture)
ktp.addEventListener('change', allowPDF)
diploma.addEventListener('change', allowPDF)
transcript.addEventListener('change', allowPDF)
