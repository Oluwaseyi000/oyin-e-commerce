const GeneralHelper = {
    BASE_URL: window.location.origin,

    number_format: (number, maximumFractionDigits = 2, minimumFractionDigits = 2) => {
        return Number(number).toLocaleString(undefined, {maximumFractionDigits, minimumFractionDigits})
    },
}
