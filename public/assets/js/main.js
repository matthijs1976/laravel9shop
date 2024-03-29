window.addEventListener('DOMContentLoaded', () => {
    const menuBtn = document.querySelector('#menu-btn')
    const dropDown = document.querySelector('#dropdown')
    

    menuBtn.addEventListener('click', () => {
        dropDown.classList.toggle('hidden')
        dropDown.classList.toggle('flex')
    })

});


    //darktheme icons test button. will be done in breeze ltr
    const sunIcon = document.querySelector(".sun");      
    //manual switch for dark theme
    const themeSwitch = () => {
        //if root contains class dark. remove class dark and change to light and toggle the sun item 
        if (document.documentElement.classList.contains("dark")) {
            document.documentElement.classList.remove("dark");
            localStorage.setItem("theme", "light");            
            return;
        }
        document.documentElement.classList.add("dark");
        localStorage.setItem("theme", "dark");        
    };
    //call theme switch on click
    sunIcon.addEventListener("click", () => {
        themeSwitch();
    });

    // const modal = document.querySelector('#modal');
    // const openModal = document.querySelector('.open-button');
    // const closeModal = document.querySelector('.close-button');

    // openModal.addEventListener('click', () => {
    //     modal.showModal();
    // });
    
