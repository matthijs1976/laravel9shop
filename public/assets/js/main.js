window.addEventListener('DOMContentLoaded', () => {
    const menuBtn = document.querySelector('#menu-btn')
    const dropdown = document.querySelector('#dropdown')

    menuBtn.addEventListener('click', () => {
        dropdown.classList.toggle('hidden')
        dropdown.classList.toggle('flex')
    });

});

    //darktheme icons
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
    
