function isPrimeNumber(k){
    let isPrime;
    let str;
    if (typeof k == 'number') {
        for (let i = 2; i < k; i++) {
            isPrime = true;
            if (k % i == 0) {
                isPrime = false;
                break;
            }
        }
		if (isPrime) {
      str = ' is prime number';
		} else {
      str = ' is not prime';
		}
      console.log(k + str)
    } else {
        if (typeof k == 'object') {
            for (let m = 0; m < k.length; m++) {
                isPrime = true;
                for (let i = 2; i < k[m]; i++) {
                    if (k[m] % i == 0) {
                        isPrime = false;
                        break;
                    }
                }
                if (isPrime) {
                    str = ' is prime number';
                } else {
                    str = ' is not prime';
                }
                console.log(k[m] + str);
            }
        } else {
            str = 'error';
            console.log(str);
        }
    }
}
