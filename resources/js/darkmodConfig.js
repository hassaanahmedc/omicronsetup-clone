const lightModeBtn = document.getElementById('lightModeToggle');
const darkModeBtn = document.getElementById('darkModeToggle');

// Function to set theme based on preference
const setTheme = (theme) => {
    localStorage.theme = theme;
    document.documentElement.classList.toggle('dark', theme === 'dark');
    darkModeBtn.classList.toggle('hidden', theme !== 'dark');
    lightModeBtn.classList.toggle('hidden', theme === 'dark');
};

// Check local storage for theme preference and set accordingly
const preferredTheme = localStorage.theme || (window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light');
setTheme(preferredTheme);

// Function to toggle theme
const toggleTheme = () => {
    const newTheme = document.documentElement.classList.contains('dark') ? 'light' : 'dark';
    setTheme(newTheme);
};

// Attach event listeners to buttons
lightModeBtn.addEventListener('click', toggleTheme);
darkModeBtn.addEventListener('click', toggleTheme);
