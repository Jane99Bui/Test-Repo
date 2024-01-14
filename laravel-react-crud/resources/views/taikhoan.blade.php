
                <div>
                    <h4>Add Account</h4>
                </div>
                <div>

                    <form action="{{ url('add-taikhoan') }}" method="POST">
                    
                    @csrf
                        <div>
                            <label>Tên học sinh</label>
                            <input type="text" name="name">
                        </div>
                        <div >
                            <label>Email học sinh</label>
                            <input type="text" name="email">
                        </div>
                        <div>
                            <label>Mật khẩu</label>
                            <input type="text" name="password"
                        </div>
                        <div>
                            <button type="submit">Save Account</button>
                        </div>

                    </form>

                </div>
