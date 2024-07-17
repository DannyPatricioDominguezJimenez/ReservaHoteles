import preset from '../../../../vendor/filament/filament/tailwind.config.preset'

export default {
    presets: [preset],
    content: [
        './app/Filament/**/*.php',
        './resources/views/filament/**/*.blade.php',
        './vendor/filament/**/*.blade.php',
    ],

    theme: {
      extend: {
        colors: {
          background: '#121212',   // Fondo oscuro
          primary: '#BB86FC',      // Morado brillante
          secondary: '#03DAC5',    // Cian brillante
          text: '#E0E0E0',         // Gris claro
          textSecondary: '#B0B0B0',// Gris medio
          border: '#333333',       // Gris oscuro
          hover: '#3700B3',        // Morado oscuro
        },
        fontFamily: {
          primary: ['Inter', 'sans-serif'],
          secondary: ['Montserrat', 'sans-serif'],
        },
      },
    },
    plugins: [],
}
