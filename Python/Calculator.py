a = input("Enter Number 1 :")
b = input("Enter Number 2 :")
print("### Menu ###")
print(" 1.Add")
print(" 2.Subtract")
print(" 3.Multiply")
print(" 4.Divide")
x = input()
if x=='1':
    print(int(a)+int(b))
elif x=='2':
    print(int(a)-int(b))
elif x=='3':
    print(int(a)*int(b))
elif x=='4':
    print(int(a)/int(b))
