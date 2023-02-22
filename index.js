const btn = document.getElementById('btn');

let index = 0;

const colors = ['violet', 'indigo','blue','green','yellow','orange','red','white'];

btn.addEventListener('click', function onClick() {
   document.body.style.backgroundColor = colors[index];
  //btn.style.backgroundColor = colors[index];
  //btn.style.color = 'white';

  index = index >= colors.length - 1 ? 0 : index + 1;
});
