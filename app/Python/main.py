import sys

def greet(name):
    return f"Hello, {name}!"

if __name__ == "__main__":
    name = sys.argv[1]  # Accept the first argument from the command line
    print(greet(name))
