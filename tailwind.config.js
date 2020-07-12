module.exports = {
    theme: {
        extend: {
            colors: {
                'purple': {
                    100: '#F7E9FD',
                    200: '#ECC8FB',
                    300: '#E0A7F9',
                    400: '#C966F4',
                    500: '#B224EF',
                    600: '#A020D7',
                    700: '#6B168F',
                    800: '#50106C',
                    900: '#350B48',
                },
                'indigo': {
                    100: '#F1F2FF',
                    200: '#DDDEFF',
                    300: '#C8C9FF',
                    400: '#9EA1FF',
                    500: '#7579FF',
                    600: '#696DE6',
                    700: '#464999',
                    800: '#353673',
                    900: '#23244D',
                },
                'orange': {
                    100: '#FEEFEC',
                    200: '#FDD7CF',
                    300: '#FBBEB2',
                    400: '#F88E78',
                    500: '#F55D3E',
                    600: '#DD5438',
                    700: '#933825',
                    800: '#6E2A1C',
                    900: '#4A1C13',
                },
            }
        },
    },
    variants: {
        borderWidth: ['responsive', 'focus'],
    },
    plugins: []
}