const colors = (color) => {
    switch (color) {
        case 'branco':
            return '#e0e0e0';
        case 'azul':
            return '#243757';
        case 'azulclaro':
            return '#3a5f6f';
        case 'cinzaclaro':
            return '#dad5b7';
        case 'cinza':
            return '#c2b79b';
        case 'cinzaescuro':
            return '#665e52';
        case 'preto':
            return '#424242';
        default:
            return color;
    }
}
export default colors;
