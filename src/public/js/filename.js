file = document.getElementById('file');
file.addEventListener('change', (e) => {
  // Get the selected file
  const [file] = e.target.files;
  console.log(e);
  // Get the file name and size
  const { name: fileName, size } = file;
  // Convert size in bytes to kilo bytes
  const fileSize = (size / 1000).toFixed(2);
  // Set the text content
  const fileNameAndSize = `${fileName} - ${fileSize}KB`;
  document.querySelector('.fileName').textContent = fileNameAndSize;
});

