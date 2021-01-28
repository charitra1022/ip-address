from flask import Flask, request

app = Flask(__name__)

@app.route('/')
def hello():
    client_ip = request.environ['HTTP_X_FORWARDED_FOR'] or request.environ['REMOTE_ADDR']
    return render_template('index.html', ip_add=client_ip)

if __name__ == '__main__':
   app.run(debug=True)