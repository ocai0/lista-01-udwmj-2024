import {of, delay} from  'rxjs'

const stream = of(1, 5, 3, 0, 6, 2, 4)
const dayOfWeek = ['domingo', 'segunda', 'terça', 'quarta', 'quinta', 'sexta', 'sábado']


const ageSub = stream.subscribe(age => console.log(`Sua idade é ${age + 17}`))
const daySub = stream.subscribe(day => console.log(`Hoje é ${dayOfWeek[day]}`))