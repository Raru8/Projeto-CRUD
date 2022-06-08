module.exports = {
  content: ["index.php",
    "table.html",
    "default_modal.php",
    "modals/delete_modal.php",
    "modals/add_modal.php",],
  theme: {
    extend: {
      colors: {
        aside: '#68A7AD',
        card: '#C4C4EE',
        whites: '#F5F5F5',
        inp: '#EFEFEF',
        sei: 'rgba(0,0,0,0.8);',
        confirm: '#79BD8F',
        cancel: '#C70D3A'
      },
      fontFamily: {
        body: ['Poppins']
      },
      margin: {
        'c': '0 auto',
      }
    },
  },
  plugins: [],
}
