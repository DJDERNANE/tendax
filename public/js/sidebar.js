var sidebar = document.getElementById('sidebar-wrapper');
var content = document.getElementById('page-content-wrapper')
//var btn = document.getElementById('btn');

// btn.addEventListener('click', function(){
//     sidebar.classList.toggle('active')
// })
sidebar.addEventListener('mouseover', function(){
    sidebar.classList.add('active')
    content.classList.add('active')
})
sidebar.addEventListener('mouseout', function(){
    sidebar.classList.remove('active')
    content.classList.remove('active')
})
