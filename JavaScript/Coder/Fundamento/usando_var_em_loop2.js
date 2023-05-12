const func = []

for (let i = 0; i < 10; i++) {
    func.push( function(){
        console.log(i)
    })
}

func[2]()
func[8]()

//var: [10 10]
//let: [2 8]