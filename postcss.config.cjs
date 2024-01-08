// export default {
//     // plugins: [{
//     //     tailwindcss: {},
//     // },
//     // require('flowbite/plugin')]
// };

module.exports = ({ env }) => ({ plugins: [ require('tailwindcss')(), require('autoprefixer')() ] })




